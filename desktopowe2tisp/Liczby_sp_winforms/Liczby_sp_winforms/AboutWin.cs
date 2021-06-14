using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Diagnostics;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Liczby_sp_winforms
{
    public partial class AboutWin : Form
    {
        public AboutWin()
        {
            InitializeComponent();
            
        }

        private void linkLabel1_LinkClicked(object sender, LinkLabelLinkClickedEventArgs e) {
            this.linkLabel1.LinkVisited = true;
            try {
                var ps = new ProcessStartInfo("http://www.onet.pl")
                {
                    UseShellExecute = true,
                    Verb = "open"
                };
                Process.Start(ps);
            }
            catch (Exception ex) {
                MessageBox.Show("ERROR");
            }
            
        }
    }
}
