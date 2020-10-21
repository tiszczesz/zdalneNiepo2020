using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace MyApp.Namespace
{
    public class Nowa1Model : PageModel
    {
        public int[] Numbers{get;set;}
        public void OnGet()
        {
            fillNumbers();
        }
        private void fillNumbers(){
            if(Numbers==null) Numbers = new int[60];
            Random rnd = new Random();
            for(var i=0;i<Numbers.Length;i++){
                Numbers[i] = rnd.Next(0,100);
            }
        }
    }
}
