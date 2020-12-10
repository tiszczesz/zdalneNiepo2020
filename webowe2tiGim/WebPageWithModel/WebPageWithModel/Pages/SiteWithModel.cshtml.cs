using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace WebPageWithModel.Pages
{
    public class SiteWithModelModel : PageModel {
        [BindProperty]
        public string Info { get; set; } = "Wstępna informacja z modelu";
        public bool IsPost { get; set; } = false;
        public void OnGet() {
            string info = "Ważna informacja na stronę";
            int sacretNumber = 456;
            ViewData["info"] = info;
            ViewData["sacret"] = sacretNumber;
            
        }

        public void OnPost() {
           // Info = info;
            IsPost = true;
        }

    }
}
