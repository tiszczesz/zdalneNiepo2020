using System;
using System.Collections.Generic;
using System.Linq;
using System.Runtime.InteropServices.ComTypes;
using System.Text;
using System.Threading.Tasks;

namespace Prezenty2020_SP
{
    public class CalcGifts
    {
        public List<Gift> Gifts { get; set; }

        public CalcGifts(List<Gift> gifts) {
            Gifts = gifts;
        }

        public List<Gift> SortByPrice(bool isDesc) {
            return isDesc
                ? this.Gifts.OrderByDescending(g => g.Price).ToList()
                : this.Gifts.OrderBy(g => g.Price).ToList();
        }

        public List<Gift> GetByFirstCharOfChild(string alpha) {
            return this.Gifts.Where(g => g.Child.StartsWith(alpha,StringComparison.CurrentCultureIgnoreCase)).ToList();
        }
    }
}
