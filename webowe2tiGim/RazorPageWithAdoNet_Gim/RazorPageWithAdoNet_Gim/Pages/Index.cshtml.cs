using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Microsoft.Extensions.Logging;
using System;
using System.Collections.Generic;
using System.Data.SqlClient;
using System.Linq;
using System.Threading.Tasks;

namespace RazorPageWithAdoNet_Gim.Pages
{
    public class IndexModel : PageModel {
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
            connection.Open();
            var state = connection.State;
        }
    }
}
