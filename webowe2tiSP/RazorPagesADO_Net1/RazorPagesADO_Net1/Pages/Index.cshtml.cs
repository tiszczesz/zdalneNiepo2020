using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Microsoft.Extensions.Logging;
using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Threading.Tasks;
using System.Data.SqlClient;
using RazorPagesADO_Net1.Models;

namespace RazorPagesADO_Net1.Pages
{
    public class IndexModel : PageModel {
        private string connectionString =
            @"Data Source=(localdb)\mssqllocaldb;Database=Games_SP_1_2021;Integrated Security=True;";
        private readonly ILogger<IndexModel> _logger;
        
        [BindProperty]
        public List<Game> Games { get; set; }
        public IndexModel(ILogger<IndexModel> logger)
        {
            _logger = logger;
        }

        public void OnGet()
        {
            SqlConnection connection = new SqlConnection(connectionString);
            Games = getAllGames(connection);
        }

        private List<Game> getAllGames(SqlConnection connection) {
            SqlCommand cmd = connection.CreateCommand();
            cmd.CommandText = "Select Id,Title,Category,Price,Description From Games";
            connection.Open();
            SqlDataReader dr = cmd.ExecuteReader();
            var list = new List<Game>();
            if (dr.HasRows) {
                while (dr.Read()) {
                    list.Add(new Game {
                        Id = dr.GetInt32(0),Title = dr.GetString(1),Category = dr.GetString(2),
                        Price = dr.GetDecimal(3),Description = dr.GetString(4)
                    });
                }
            }
            connection.Close();
            return list;
        }
    }
}
