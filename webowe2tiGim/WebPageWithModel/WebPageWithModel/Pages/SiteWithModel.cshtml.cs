using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace WebPageWithModel.Pages
{
    public class SiteWithModelModel : PageModel {
        public string Info { get; set; } = "Wstêpna informacja z modelu";
        public bool IsPost { get; set; } = false;
        public void OnGet() {
            string info = "Wa¿na informacja na stronê";
            int sacretNumber = 456;
            ViewData["info"] = info;
            ViewData["sacret"] = sacretNumber;
            
        }

        public void OnPost(string info) {
            Info = info;
            IsPost = true;
        }

    }
}
