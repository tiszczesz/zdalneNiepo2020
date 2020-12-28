using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Prezenty2020_SP
{
    public class Gift
    {
        public string Name { get; set; }
        public string Child { get; set; }
        public decimal Price { get; set; }

        public string Info() {
            return $"Prezent {Name} dla: {Child} w cenie: {Price}";
        }
    }
}
