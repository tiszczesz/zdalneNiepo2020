using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using AdoNet_Posts.Models;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Microsoft.Extensions.Configuration;

namespace AdoNet_Posts.Pages
{
    
    public class ListOfPostsModel : PageModel
    {
        [BindProperty]
        public List<Post> Posts { get; set; }
        private IConfiguration configuration;
        private string connection;

        public ListOfPostsModel(IConfiguration configuration) {
            this.configuration = configuration;
            this.connection = this.configuration["ConnectionStrings:DefaultConnection"];
        }
        public void OnGet()
        {

        }
    }
}
