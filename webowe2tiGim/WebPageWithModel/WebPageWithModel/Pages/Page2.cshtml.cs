using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using WebPageWithModel.Models;

namespace WebPageWithModel.Pages
{
    
    public class Page2Model : PageModel
    {
        [BindProperty]
        public Person MyPerson { get; set; }
        
        public void OnGet() {
            ViewData["IsPost"] = false;
            MyPerson = new Person() {FirstName = "Janusz", LastName = "Nowak", Age = 33};
        }

        public void OnPost() {
            ViewData["IsPost"] = true;

        }
    }
}
