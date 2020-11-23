using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using WebEmptyVS2019RazorPages.Models;


namespace WebEmptyVS2019RazorPages.Pages
{
    public class NWDModel : PageModel {
        public bool IsPost { get; set; } = false;
        public bool IsOk { get; set; } = false;
        public NWD_Modl NWD_M { get; set; }
        public string ResultNWD { get; set; }
        public string Info { get; set; }    
        public void OnGet()
        {
        }

        public void OnPost() {
            IsPost = true;
            NWD_M = new NWD_Modl();
            try {
                NWD_M.A = Convert.ToInt32(Request.Form["a"]);
                NWD_M.B = Convert.ToInt32(Request.Form["b"]);
                string metoda = Request.Form["metoda"];
                ResultNWD = metoda == "iter" ? "Metoda iteracyna: "+NWD_M.NWDIter(NWD_M.A, NWD_M.B)
                    : "Metoda rekurencyjna: "+ NWD_M.NWDRec(NWD_M.A, NWD_M.B);
                IsOk = true;
                Info = "OK";
            }
            catch (FormatException ex) {
                IsOk = false;
                Info = ex.Message + " b³êdne dane!!!";
            }
          
        }
    }
}
