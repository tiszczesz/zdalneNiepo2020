using System;
using System.Collections.Generic;
using System.Data;
using System.Data.SqlClient;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Microsoft.Extensions.Configuration;

namespace RazorPagesADO_Net1.Pages
{
    public class DeleteModel : PageModel {
        private IConfiguration configuration;
        private string connString;

        public DeleteModel(IConfiguration configuration) {
            this.configuration = configuration;
            connString = configuration["ConnectionStrings:DefaultConnection"];
        }
        public IActionResult OnGet(int? id=null) {
            ViewData["Info"] = id;
            if (id == null) return RedirectToAction("Index");
            int gameId = (int) id;
            using (SqlConnection connection = new SqlConnection(connString)) {
                using (SqlCommand command = connection.CreateCommand()) {
                    command.CommandType = CommandType.Text;
                    string sql = $"DELETE FROM Games WHERE Id={gameId}";
                    command.CommandText = sql;
                    connection.Open();
                    command.ExecuteNonQuery();
                    connection.Close();
                }
            }

            return RedirectToPage("Index");
        }
    }
}
