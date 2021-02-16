using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace RazorPagesADO_Net1.Pages
{
    public class EditModel : PageModel
    {
        public void OnGet(int? id=null)
        {
            ViewData["Info"] = id;
        }
    }
}
