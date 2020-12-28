using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using CoreRazarPagesModel_sp.Models;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace CoreRazarPagesModel_sp.Pages
{
    public class Page3Model : PageModel
    {
        [BindProperty]
        public List<Film> Films { get; set; }
        public void OnGet()
        {
            Repository repo = new Repository();
            Films = repo.Films;
        }
    }
}
