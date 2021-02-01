using System;
using System.Collections.Generic;
using System.Configuration;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Microsoft.Extensions.Configuration;
using RazorPageWithAdoNet_Gim.Models;

namespace RazorPageWithAdoNet_Gim.Pages
{
    public class FilmPageModel : PageModel
    {
        [BindProperty]
        public Film MyFilm { get; set; }

        //public IConfiguration _configuration { get; set; } = new Co
        private string connString = @"Data Source=(localdb)\MSSQLLocalDB;Database=Filmy2020_Gim_cw1;Integrated Security=True;";
        public void OnGet()
        {
        }

        public void OnPost() {

        }

    }
}
