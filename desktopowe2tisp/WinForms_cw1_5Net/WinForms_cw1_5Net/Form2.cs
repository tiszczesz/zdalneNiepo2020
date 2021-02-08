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
    public partial class Form2 : Form {
        private DateTime dtp = DateTime.Now;
        public Form2()
        {
            InitializeComponent();
        }

        private void ButtonClick(object sender, EventArgs e)
        {
            DateTime dtk = DateTime.Now;
            label1.Text = "Kliknięto przycisk: " +Math.Round((dtk-dtp).TotalSeconds,3);
            dtp = dtk;
        }
    }
}
