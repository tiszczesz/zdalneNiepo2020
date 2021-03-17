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
        public static BindingList<Films> GetFilms() {
            var result = new BindingList<Films>();
            result.Add(new Films(){Title = "ABC",Author = "Roman Polański",Price = 34.89M});
            result.Add(new Films(){Title = "ddd",Author = "Roman Polański",Price = 34.89M});
            result.Add(new Films(){Title = "eee",Author = "Roman Polański",Price = 34.89M});
            return result;
        }
    }
}
