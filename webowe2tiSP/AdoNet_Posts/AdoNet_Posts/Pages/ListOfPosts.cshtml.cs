using System;
using System.Collections.Generic;
using System.Data.SqlClient;
using System.Linq;
using System.Threading.Tasks;
using AdoNet_Posts.Models;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Microsoft.Extensions.Configuration;

namespace AdoNet_Posts.Pages
{
    
    public class ListOfPostsModel : PageModel
    {
        [BindProperty]
        public List<Post> Posts { get; set; } = new List<Post>();
        private IConfiguration configuration;
        private string connString;

        public ListOfPostsModel(IConfiguration configuration) {
            this.configuration = configuration;
            this.connString = this.configuration["ConnectionStrings:DefaultConnection"];
        }
        public void OnGet()
        {
            using (SqlConnection connection = new SqlConnection(connString)) {
                connection.Open();
                FillPosts(connection);
                connection.Close();
            }
        }

        private void FillPosts(SqlConnection connection) {
            using (SqlCommand command = connection.CreateCommand()) {
                command.CommandText = "SELECT Id,Title,Content,Date FROM Posts";
               
                SqlDataReader rd = command.ExecuteReader();
                if (rd.HasRows) {
                    while (rd.Read()) {
                        Posts.Add(new Post() {
                            Id = rd.GetInt32(0),
                            Title = rd.GetString(1),
                            Content = rd.GetString(2),
                            Date = rd.GetDateTime(3)
                        });
                    }
                }

            }
        }
    }
}
