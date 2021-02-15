using System;
using System.Collections.Generic;
using System.Configuration;
using System.Data;
using System.Data.SqlClient;
using System.Globalization;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.Localization;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Microsoft.Extensions.Configuration;
using RazorPageWithAdoNet_Gim.Models;

namespace RazorPageWithAdoNet_Gim.Pages
{
    public class FilmPageModel : PageModel
    {
        [BindProperty]
        public Film MyFilm { get; set; }

        private IConfiguration configuration;
        private string connString;
        private SqlConnection connection;

        public FilmPageModel(IConfiguration configuration) {
            this.configuration = configuration;
            connString = configuration["ConnectionStrings:DefaultConnection"];
        }

        
        
        public void OnGet() {
            
        }

        public void OnPost() {
            connection = new SqlConnection(connString);
            
            string sql =
                $"INSERT INTO Filmy(Title,Author,Length,Price) "
                +$"VALUES('{MyFilm.Title}','{MyFilm.Author}',{MyFilm.Length},{MyFilm.Price.ToString(new CultureInfo("en-US"))})";
            
            using (SqlCommand command = new SqlCommand(sql,connection)) {
                command.CommandType = CommandType.Text;
                connection.Open();
                command.ExecuteNonQuery();
                connection.Close();
            }
            
        }

    }
}
