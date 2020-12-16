using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace CoreRazarPagesModel_sp.Models {
    public class Repository {
        public Repository() {
            Films = new List<Film> {
                new Film {
                    Title = "Ryby akwariowe 3", Director = "Roman Polański", Length = 120,
                    Data = new DateTime(2003, 3, 12),MyTypeFilm = TypeFilm.sensacyjny
                },
                new Film {
                    Title = "Szeregowiec Tomasz", Director = "Roman Polański", Length = 120,
                    Data = new DateTime(2003, 3, 12),MyTypeFilm = TypeFilm.sf
                },
                new Film {
                    Title = "Ryby akwariowe", Director = "Roman Polański", Length = 120,
                    Data = new DateTime(2003, 3, 12),MyTypeFilm = TypeFilm.komedia
                },
                new Film {
                    Title = "Franek na wakacjach", Director = "Maryla Polański", Length = 120,
                    Data = new DateTime(2003, 3, 12),MyTypeFilm = TypeFilm.obyczajowy
                },
            };
        }

        public List<Film> Films { get; set; }
    }
}