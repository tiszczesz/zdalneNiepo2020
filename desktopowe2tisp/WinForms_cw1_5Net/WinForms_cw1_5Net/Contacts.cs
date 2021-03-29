using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace WinForms_cw1_5Net
{
    public class Contacts
    {
        public BindingList<string> MyContacts { get; set; }

        public Contacts() {
            MyContacts = FillContacts();
        }

        private BindingList<string> FillContacts() {
            return new BindingList<string>() {
                "Antoni", "Maruisz", "Roman", "Monika", "Teresa", "Urszula"
            };
        }
    }
    
}
