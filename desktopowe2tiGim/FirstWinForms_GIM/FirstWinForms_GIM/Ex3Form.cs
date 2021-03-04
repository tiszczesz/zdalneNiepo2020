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
    public partial class Ex3Form : Form {
        private MainWindow window;
        public Ex3Form(MainWindow window)
        {
            InitializeComponent();
            this.window = window;
            window.GeTextBox().Text += "Utworzono okienko: " + this.Text+Environment.NewLine;
        }

        private void Ex3Form_FormClosed(object sender, FormClosedEventArgs e) {
            window.GeTextBox().Text += "Zamknięto okienko: " + this.Text+Environment.NewLine;
        }
    }
}
