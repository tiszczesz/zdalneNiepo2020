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
    public class EditModel : PageModel
    {
        [BindProperty]
        public Game MyGame { get; set; }

        private string connString;
        private IConfiguration configuration;

        public EditModel(IConfiguration configuration) {
            this.configuration = configuration;
            connString = configuration["ConnectionStrings:DefaultConnection"];
        }
        public IActionResult OnGet(int? id=null)
        {
            ViewData["Info"] = id;
            if (id == null) return RedirectToPage("Index");
            using (SqlConnection connection = new SqlConnection(connString)) {
                using (SqlCommand command = connection.CreateCommand()) {
                    string sql = "Select Id,Title,Category,Price,Description From Games WHERE Id=@id";
                    command.CommandText = sql;
                    SqlParameter param = new SqlParameter {
                        ParameterName = "@id",
                        Value = id,
                        SqlDbType = SqlDbType.Int
                    };
                    command.Parameters.Add(param);
                    connection.Open();
                    using (SqlDataReader dr = command.ExecuteReader()) {
                        if (dr.HasRows) {
                            dr.Read();
                            MyGame = new Game {
                                Id = dr.GetInt32(0),
                                Title = dr.GetString(1),
                                Category = dr.GetString(2),
                                Price = dr.GetDecimal(3),
                                Description = dr.GetString(4)
                            };
                            
                        }
                        else {
                            return RedirectToPage("Index");
                        }
                    }
                }
            }
            return Page();
        }

        public IActionResult OnPost(int id) {
            if (ModelState.IsValid) {
                using (SqlConnection connection = new SqlConnection(connString)) {
                    string sql = "UPDATE Games SET Title=@Title,Category=@Category,"
                                 + "Price=@Price,"
                                 + "Description=@Description WHERE Id=@id";
                    using (SqlCommand command = new SqlCommand(sql,connection)) {
                        SqlParameter param1 = new SqlParameter {
                            ParameterName = "@Title",
                            Value = MyGame.Title,
                            SqlDbType = SqlDbType.NVarChar,
                            Size = 50
                        };
                        command.Parameters.Add(param1);
                        SqlParameter param2 = new SqlParameter {
                            ParameterName = "@Category",
                            Value = MyGame.Category,
                            SqlDbType = SqlDbType.NVarChar,
                            Size = 50
                        };
                        command.Parameters.Add(param2);
                        SqlParameter param3 = new SqlParameter {
                            ParameterName = "@Price",
                            Value = MyGame.Price,
                            SqlDbType = SqlDbType.Decimal,
                        };
                        command.Parameters.Add(param3);
                        SqlParameter param4 = new SqlParameter {
                            ParameterName = "@Description",
                            Value = MyGame.Description,
                            SqlDbType = SqlDbType.NVarChar,
                            Size = 100
                        };
                        command.Parameters.Add(param4);
                        SqlParameter param5 = new SqlParameter {
                            ParameterName = "@id",
                            Value = id,
                            SqlDbType = SqlDbType.Int
                        };
                        command.Parameters.Add(param5);
                        connection.Open();
                        command.ExecuteNonQuery();
                        connection.Close();
                    }
                }
                return RedirectToPage("Index");
            }
            else {
                return Page();
            }
        }
    }
}
