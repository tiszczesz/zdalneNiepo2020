using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using KursWebRazorPage_1.Models;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace KursWebRazorPage_1.Pages
{
    public class BooksModel : PageModel
    {
        [BindProperty]
        public List<Book> Books { get; set; }

        public void OnGet() {
            Books = BooksRepo.GetBooks();
        }
    }
}
