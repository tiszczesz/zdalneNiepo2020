﻿using System;
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
        private BindingList<string>  contactsList;
        public Ex3Form(MainWindow window) {
            this.window = window;
            InitializeComponent();
            Contacts contacts = new Contacts();
            contactsList = contacts.MyContacts;
            listBoxContacts.DataSource = contactsList;
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

        private void btnClear_Click(object sender, EventArgs e)
        {
            contactsList.Clear();
        }

        private void btnAddNew_Click(object sender, EventArgs e) {
            string contact = txtBoxItem.Text.Trim();
            if (String.IsNullOrEmpty(contact)) {
                MessageBox.Show("Musisz podać nowy kontakt!!!","UWAGA!!!!");
                return;
            }
            contactsList.Add(contact);
            txtBoxItem.Text = "";
        }

        private void btnInsert_Click(object sender, EventArgs e) {
            //MessageBox.Show(listBoxContacts.SelectedIndex.ToString());
            if (listBoxContacts.SelectedIndex == -1) {
                return;
            }
            string contact = txtBoxItem.Text.Trim();
            if (String.IsNullOrEmpty(contact))
            {
                MessageBox.Show("Musisz podać nowy kontakt!!!", "UWAGA!!!!");
                return;
            }
            contactsList.Insert(listBoxContacts.SelectedIndex,contact);
            txtBoxItem.Text = "";
        }

        private void btnDeleteContact_Click(object sender, EventArgs e)
        {

        }
    }
}
