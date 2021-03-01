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
using RazorPageWithAdoNet_Gim.Models;


namespace RazorPageWithAdoNet_Gim.Pages
{
   
    public class EditFilmModel : PageModel
    {
        [BindProperty]
        public Film MyFilm { get; set; }
        private IConfiguration configuration;
        private string connString;

        public EditFilmModel(IConfiguration configuration) {
            this.configuration = configuration;
            connString = configuration["ConnectionStrings:DefaultConnection"];

        }
        public IActionResult OnGet(int? id=null) {
            if (id == null) return RedirectToPage("Index");
            using (SqlConnection connection = new SqlConnection(connString)) {
                SqlCommand command = connection.CreateCommand();
                string sql = "SELECT Id,Title,Author,Length,Price from Filmy WHERE Id=@FilmId";
                SqlParameter parameter = new SqlParameter {
                    ParameterName = "@FilmId",
                    Value = id,
                    SqlDbType = SqlDbType.Int
                };
                command.Parameters.Add(parameter);
                command.CommandText = sql;
                connection.Open();
                SqlDataReader reader = command.ExecuteReader();
                if (reader.HasRows) {
                    reader.Read();
                    MyFilm = new Film {
                        Id = reader.GetInt32(0), Title = reader.GetString(1),
                        Author = reader.GetString(2), Length = reader.GetInt32(3), Price = reader.GetDecimal(4)
                    };
                }
                connection.Close();
            }
            return Page();
        }

        public IActionResult OnPost(int id) {
            if (ModelState.IsValid) {
                ViewData["info"] = "OK";
                using (SqlConnection connection = new SqlConnection(connString)) {
                    string sql = "UPDATE Filmy SET Title=@Title, Author=@Author,"
                                 + " Length=@Length,"
                    +" Price=@Price WHERE Id=@FilmId";
                    using (SqlCommand command = new SqlCommand(sql,connection)) {
                        SqlParameter parameter1 = new SqlParameter {
                            ParameterName = "@Title",
                            Value = MyFilm.Title,
                            SqlDbType = SqlDbType.VarChar,
                            Size = 50
                        };
                        command.Parameters.Add(parameter1);
                        SqlParameter parameter2 = new SqlParameter
                        {
                            ParameterName = "@Author",
                            Value = MyFilm.Author,
                            SqlDbType = SqlDbType.VarChar,
                            Size = 50
                        };
                        command.Parameters.Add(parameter2);
                        SqlParameter parameter3 = new SqlParameter
                        {
                            ParameterName = "@Length",
                            Value = MyFilm.Length,
                            SqlDbType = SqlDbType.Int
                        };
                        command.Parameters.Add(parameter3);
                        SqlParameter parameter4 = new SqlParameter
                        {
                            ParameterName = "@Price",
                            Value = MyFilm.Price,
                            SqlDbType = SqlDbType.Decimal
                        };
                        command.Parameters.Add(parameter4);
                        SqlParameter parameter5 = new SqlParameter
                        {
                            ParameterName = "@FilmId",
                            Value = id,
                            SqlDbType = SqlDbType.Int
                        };
                        command.Parameters.Add(parameter5);
                        connection.Open();
                        command.ExecuteNonQuery();
                        connection.Close();
                    }
                }
                
            }
            else {
                ViewData["info"] = "B³¹d!!!";
            }

            return RedirectToPage("Index");
        }
    }
}
