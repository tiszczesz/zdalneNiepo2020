using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Microsoft.Extensions.Logging;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using System.IO;

namespace WebPageWithModel.Pages
{
    public class IndexModel : PageModel
    {
        private readonly ILogger<IndexModel> _logger;
            
        [BindProperty] 
        public string Koleda { get; set; }

        public IndexModel(ILogger<IndexModel> logger)
        {
            _logger = logger;
        }

        public void OnGet()
        {
            Random rnd = new Random();
            int losowa = rnd.Next(1, 4);
            string path = Directory.GetCurrentDirectory();

            Koleda = System.IO.File.ReadAllText(path + @"\koledy\" + losowa + ".txt");
        }
    }
}
