using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace FromEmptyToRP_SP.Models
{
    public class Silnia
    {
        public int SilniaRek(int n) {
            if (n <= 1) return 1;
            return SilniaRek(n - 1) * n;
        }

        public int SilniaIter(int n) {
            int wynik = 1;
            for (int i = 1; i <= n; i++) {
                wynik *= i;
            }

            return wynik;
        }
    }
}
