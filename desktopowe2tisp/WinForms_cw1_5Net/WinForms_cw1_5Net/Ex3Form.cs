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
    public partial class Ex3Form : Form {
        private MainWindow window;
        public Ex3Form(MainWindow window) {
            this.window = window;
            InitializeComponent();
        }

        private void Ex3Form_Load(object sender, EventArgs e)
        {
            if (window != null)
            {
                window.GeTextBox().Text += "Załadowano okienko: " + Text + " w czasie: "
                                            + DateTime.Now.ToLongTimeString() + Environment.NewLine;
            }
        }

        private void Ex3Form_FormClosed(object sender, FormClosedEventArgs e)
        {
            if (window != null)
            {
                window.GeTextBox().Text += "Zamknięto okienko: " + Text + "w czasie: "
                                            + DateTime.Now.ToLongTimeString() + Environment.NewLine;
            }
        }
    }
}
