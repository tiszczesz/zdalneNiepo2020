using System;
using System.Collections.Generic;
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
    }
}
