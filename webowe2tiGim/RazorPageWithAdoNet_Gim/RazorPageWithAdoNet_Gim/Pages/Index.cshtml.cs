using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Microsoft.Extensions.Logging;
using System;
using System.Collections.Generic;
using System.Data;
using System.Data.SqlClient;
using System.Linq;
using System.Threading.Tasks;
using RazorPageWithAdoNet_Gim.Models;

namespace RazorPageWithAdoNet_Gim.Pages
{
    public class IndexModel : PageModel {

        [BindProperty]
        public List<Film> Films { get; set; }

        private string sqlConnectionString =
            @"Data Source=(localdb)\MSSQLLocalDB;Initial Catalog=Filmy2020_Gim_cw1;Integrated Security=True;Connect Timeout=30;Encrypt=False;TrustServerCertificate=False;ApplicationIntent=ReadWrite;MultiSubnetFailover=False";
        private readonly ILogger<IndexModel> _logger;
        private SqlConnection connection;
        public IndexModel(ILogger<IndexModel> logger)
        {
            _logger = logger;
        }

        public void OnGet()
        {
            connection = new SqlConnection(sqlConnectionString);
            Films = getAllFilms(connection);
        }

        private List<Film> getAllFilms(SqlConnection connection) {
            List<Film> films = new List<Film>();
            SqlCommand command = connection.CreateCommand();
            command.CommandText = "select Id,Title,Author,Length,Price from Filmy";
            connection.Open();
            SqlDataReader dr = command.ExecuteReader();
            if (dr.HasRows) {
                while (dr.Read()) {
                    films.Add(new Film {
                        Id = dr.GetInt32(0), Title = dr.GetString(1), Author = dr.GetString(2),
                        Length = dr.GetInt32(3), Price = dr.GetDecimal(4)
                    });
                }
            }
            connection.Close();
            return films;
        }
    }
}
