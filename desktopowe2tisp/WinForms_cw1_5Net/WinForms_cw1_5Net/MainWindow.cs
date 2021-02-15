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
    public partial class MainWindow : Form
    {
        public MainWindow()
        {
            InitializeComponent();
        }

        private void btnEx1_Click(object sender, EventArgs e) {
            //txtBoxMain.Text += $"Kliknięto przycisk: {DateTime.Now.ToLongTimeString()}"
            //                        +Environment.NewLine;
            var f2 = new Form2(this);
            f2.WindowState = FormWindowState.Maximized;
            f2.ShowDialog();
        }

        public TextBox GeTextBox() {
            return this.txtBoxMain;
        }

        private void btnEx2_Click(object sender, EventArgs e) {
            new Form1().ShowDialog();
        }
    }
}
