using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace Cw2Empty
{
    public class Nowa1Model : PageModel
    {
        public string[] Kwiaty{get;set;}
        public void OnGet()
        {
            Kwiaty = new string[5];
            fillKwiaty();
        }
        private void fillKwiaty(){
            if(Kwiaty == null) Kwiaty = new string[5];
            Kwiaty[0] = "Róża";
            Kwiaty[1] = "Goździk";
            Kwiaty[2] = "Stokrotka";
            Kwiaty[3] = "Tulipan";
            Kwiaty[4] = "Przebiśniegi";
        }
    }
}
