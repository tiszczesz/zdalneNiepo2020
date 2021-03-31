using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace FirstWinForms_GIM.Models.Ex3Models
{
    class FilmsList
    {
        public static List<Films> GetFilms() {
            var result = new List<Films>();
            result.Add(new Films(){Title = "ABC",Author = "Roman Polański",Price = 34.89M});
            result.Add(new Films(){Title = "ddd",Author = "Taduusz Polański",Price = 55.89M});
            result.Add(new Films(){Title = "eee",Author = "Adam Polański",Price = 22.66M});
            return result;
        }
    }
}
