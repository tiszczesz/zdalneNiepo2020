using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using CoreRazarPagesModel_sp.Models;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace CoreRazarPagesModel_sp.Pages
{
    public class Page2Model : PageModel
    {
        [BindProperty]
        public Film MyFilm { get; set; }
        public void OnGet() {
            ViewData["isPost"] = false;
            MyFilm = new Film() {Title = "alicja...", Director = "Adam S³odowy",
                          Length = 180, Data = DateTime.Now};
        }
    }
}
