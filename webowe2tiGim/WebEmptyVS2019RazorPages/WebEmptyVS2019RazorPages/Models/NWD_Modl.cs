using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace WebEmptyVS2019RazorPages.Models
{
    public class NWD_Modl
    {
        public int A { get; set; }
        public int B { get; set; }

        public  int NWDRec(int a, int b) {
            if (b == 0) return a;
            return NWDRec(b, a % b);
        }

        public  int NWDIter(int a, int b) {
            int temp;
            while (b != 0) {
                temp = a;
                a = b;
                b = temp % b;
            }

            return a;
        }
    }
}
