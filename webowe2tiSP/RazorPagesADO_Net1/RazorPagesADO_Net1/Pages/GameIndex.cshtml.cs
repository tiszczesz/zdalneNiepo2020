using System;
using System.Collections.Generic;
using System.Data.SqlClient;
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
                    string sql =
                        $"INSERT INTO Games(Title,Category,Price,Description ) VALUES('{MyGame.Title}','{MyGame.Category}',{MyGame.Price},'{MyGame.Description}')";
                    using (SqlCommand command = new SqlCommand(sql,connection)) {
                        
                    }
                }
            }
            
        }
    }
}
