using System;
using System.Collections.Generic;
using System.Data;
using System.Data.SqlClient;
using System.Globalization;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Microsoft.Extensions.Configuration;
using RazorPagesADO_Net1.Models;


namespace RazorPagesADO_Net1.Pages
{
    public class GameIndexModel : PageModel {
        private string connString;
        private IConfiguration configuration;

        [BindProperty]
        public Game MyGame { get; set; }

        public void OnGet()
        {
        }

        public GameIndexModel(IConfiguration configuration) {
            this.configuration = configuration;
            connString = configuration["ConnectionStrings:DefaultConnection"];
        }

        public void OnPost() {
            if (ModelState.IsValid) {
                using (SqlConnection connection = new SqlConnection(connString)) {
                    //todo zamiana na u¿ycie paramertrów zamiast na ³osia
                    string sql =
                        $"INSERT INTO Games(Title,Category,Price,Description ) VALUES(N'{MyGame.Title}'"
                        +$",N'{MyGame.Category}',{MyGame.Price.ToString(new CultureInfo("en_US"))},"
                        +$"N'{MyGame.Description}')";
                    using (SqlCommand command = new SqlCommand(sql,connection)) {
                        command.CommandType = CommandType.Text;
                        connection.Open();
                        command.ExecuteNonQuery();
                        connection.Close();
                    }
                }

                ViewData["info"] = "Zapisano grê do bazy danych";
            }
            else {
                ViewData["info"] = "B³êdne dane!!!";
            }
            
        }
    }
}
