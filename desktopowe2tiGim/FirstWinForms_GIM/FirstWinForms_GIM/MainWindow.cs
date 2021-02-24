using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace FirstWinForms_GIM
{
    public partial class MainWindow : Form
    {
        public MainWindow()
        {
            InitializeComponent();
        }

        private void btnEx1_Click(object sender, EventArgs e) {
            Ex1Form f1 = new Ex1Form(this);
            f1.ShowDialog();
        }

        private void btnEx2_Click(object sender, EventArgs e) {
            new Ex2Form(this).ShowDialog();
        }

        private void btnExit_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

        public TextBox GeTextBox() {
            return tbInfo;
        }
    }
}
