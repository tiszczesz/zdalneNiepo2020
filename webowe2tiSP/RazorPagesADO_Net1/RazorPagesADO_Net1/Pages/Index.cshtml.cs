using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Microsoft.Extensions.Logging;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using System.Data.SqlClient;

namespace RazorPagesADO_Net1.Pages
{
    public class IndexModel : PageModel {
        private string connectionString =
            @"Data Source=(localdb)\mssqllocaldb;Initial Catalog=Games_SP_1_2021;Integrated Security=True;";
        private readonly ILogger<IndexModel> _logger;

        public IndexModel(ILogger<IndexModel> logger)
        {
            _logger = logger;
        }

        public void OnGet()
        {
            SqlConnection connection = new SqlConnection(connectionString);
            connection.Open();
            var state = connection.State;
        }
    }
}
