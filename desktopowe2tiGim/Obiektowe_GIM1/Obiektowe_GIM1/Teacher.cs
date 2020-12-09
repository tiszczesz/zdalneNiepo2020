using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Obiektowe_GIM1
{
    class Teacher:Person
    {
        public List<string> Topics { get; set; } = new List<string>();
        //todo 2 konstruktory i metoda info wyswitlajaca to co Person + lista nauczanych przedmiotow

    }
}
