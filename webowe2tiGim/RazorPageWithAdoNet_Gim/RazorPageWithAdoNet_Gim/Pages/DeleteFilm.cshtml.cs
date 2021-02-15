using System;
using System.Collections.Generic;
using System.Data;
using System.Data.SqlClient;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Microsoft.Extensions.Configuration;

namespace RazorPageWithAdoNet_Gim.Pages
{
    public class DeleteFilmModel : PageModel {
        private IConfiguration configuration;
        private string connString;
        public DeleteFilmModel(IConfiguration configuration) {
            this.configuration = configuration;
            connString = configuration["ConnectionStrings:DefaultConnection"];
        }
        public IActionResult OnGet(int? id=null) {
            if(id==null) return RedirectToPage("Index");
            int filmId = (int) id;
            using (SqlConnection connection = new SqlConnection(connString)) {
                using (SqlCommand command = connection.CreateCommand()) {
                    string sql = $"DELETE FROM Filmy where Id={filmId}";
                    command.CommandType = CommandType.Text;
                    command.CommandText = sql;
                    connection.Open();
                    var result = command.ExecuteNonQuery();
                    connection.Close();
                }
            }
            return RedirectToPage("Index");
        }
    }
}
