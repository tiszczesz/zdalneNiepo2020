using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WinForms_cw1_5Net
{
    public partial class BookDetails : Form {
        private Ex3Form parEx3Form;
        public BookDetails(Ex3Form parentEx3Form)
        {
            InitializeComponent();
            this.parEx3Form = parentEx3Form;
        }
    }
}
