using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace CoreRazarPagesModel_sp.Pages
{
    public class WebWitModelModel : PageModel
    {
        [BindProperty]
        public string MyModel { get; set; }
        public bool IsPost { get; set; }
        public void OnGet() {
            IsPost = false;
            ViewData["info1"] = "Moje wa¿ne info na stronê";
            MyModel = "Info z modelu";
        }

        public void OnPost() {
            IsPost = true;
            string fromModel = MyModel;

        }
    }
}
