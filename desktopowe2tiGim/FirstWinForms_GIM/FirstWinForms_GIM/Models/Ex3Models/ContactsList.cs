using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace FirstWinForms_GIM.Models.Ex3Models
{
    public class ContactsList
    {
        public BindingList<string> List { get; set; }

        public ContactsList() {
            string[] data = new string[] { "Anna", "Dominika", "Tomasz","Eugeniusz"};
            List = new BindingList<string>();
            List.Add("Anna");
            List.Add("Dominika");
            List.Add("Tomasz");
            List.Add("Eugeniusz");
        }
    }
}
