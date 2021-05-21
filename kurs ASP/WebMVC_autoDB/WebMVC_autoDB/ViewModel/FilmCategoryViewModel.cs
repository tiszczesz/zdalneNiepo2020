using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using WebMVC_autoDB.Models;

namespace WebMVC_autoDB.ViewModel
{
    public class FilmCategoryViewModel
    {
        public Category MyCategory { get; set; }
        public List<Film> Films { get; set; }
    }
}
