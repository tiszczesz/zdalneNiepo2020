
namespace WinForms_cw1_5Net
{
    partial class Ex3Form
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.txtBoxItem = new System.Windows.Forms.TextBox();
            this.btnAddNew = new System.Windows.Forms.Button();
            this.btnClear = new System.Windows.Forms.Button();
            this.listBoxContacts = new System.Windows.Forms.ListBox();
            this.btnInsert = new System.Windows.Forms.Button();
            this.btnDeleteContact = new System.Windows.Forms.Button();
            this.btnEdit = new System.Windows.Forms.Button();
            this.panel1 = new System.Windows.Forms.Panel();
            this.panel2 = new System.Windows.Forms.Panel();
            this.addNewButton = new System.Windows.Forms.Button();
            this.editBookButton = new System.Windows.Forms.Button();
            this.deleteBookButton = new System.Windows.Forms.Button();
            this.clearAllButton = new System.Windows.Forms.Button();
            this.insertBookButton = new System.Windows.Forms.Button();
            this.BooksListView = new System.Windows.Forms.ListView();
            this.columnHeader1 = new System.Windows.Forms.ColumnHeader();
            this.columnHeader2 = new System.Windows.Forms.ColumnHeader();
            this.columnHeader3 = new System.Windows.Forms.ColumnHeader();
            this.columnHeader4 = new System.Windows.Forms.ColumnHeader();
            this.panel1.SuspendLayout();
            this.panel2.SuspendLayout();
            this.SuspendLayout();
            // 
            // txtBoxItem
            // 
            this.txtBoxItem.Location = new System.Drawing.Point(28, 16);
            this.txtBoxItem.Name = "txtBoxItem";
            this.txtBoxItem.Size = new System.Drawing.Size(194, 27);
            this.txtBoxItem.TabIndex = 1;
            // 
            // btnAddNew
            // 
            this.btnAddNew.Location = new System.Drawing.Point(28, 62);
            this.btnAddNew.Name = "btnAddNew";
            this.btnAddNew.Size = new System.Drawing.Size(194, 29);
            this.btnAddNew.TabIndex = 2;
            this.btnAddNew.Text = "Dodaj na koniec listy";
            this.btnAddNew.UseVisualStyleBackColor = true;
            this.btnAddNew.Click += new System.EventHandler(this.btnAddNew_Click);
            // 
            // btnClear
            // 
            this.btnClear.Location = new System.Drawing.Point(28, 326);
            this.btnClear.Name = "btnClear";
            this.btnClear.Size = new System.Drawing.Size(194, 29);
            this.btnClear.TabIndex = 3;
            this.btnClear.Text = "Wyczyść listę";
            this.btnClear.UseVisualStyleBackColor = true;
            this.btnClear.Click += new System.EventHandler(this.btnClear_Click);
            // 
            // listBoxContacts
            // 
            this.listBoxContacts.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(192)))), ((int)(((byte)(255)))), ((int)(((byte)(192)))));
            this.listBoxContacts.Dock = System.Windows.Forms.DockStyle.Left;
            this.listBoxContacts.FormattingEnabled = true;
            this.listBoxContacts.ItemHeight = 20;
            this.listBoxContacts.Location = new System.Drawing.Point(0, 0);
            this.listBoxContacts.Name = "listBoxContacts";
            this.listBoxContacts.Size = new System.Drawing.Size(254, 549);
            this.listBoxContacts.TabIndex = 4;
            this.listBoxContacts.MouseDoubleClick += new System.Windows.Forms.MouseEventHandler(this.listBoxContacts_MouseDoubleClick);
            // 
            // btnInsert
            // 
            this.btnInsert.Location = new System.Drawing.Point(28, 128);
            this.btnInsert.Name = "btnInsert";
            this.btnInsert.Size = new System.Drawing.Size(194, 29);
            this.btnInsert.TabIndex = 5;
            this.btnInsert.Text = "Wstaw kontakt";
            this.btnInsert.UseVisualStyleBackColor = true;
            this.btnInsert.Click += new System.EventHandler(this.btnInsert_Click);
            // 
            // btnDeleteContact
            // 
            this.btnDeleteContact.Location = new System.Drawing.Point(28, 194);
            this.btnDeleteContact.Name = "btnDeleteContact";
            this.btnDeleteContact.Size = new System.Drawing.Size(194, 29);
            this.btnDeleteContact.TabIndex = 6;
            this.btnDeleteContact.Text = "Usuń kontakt";
            this.btnDeleteContact.UseVisualStyleBackColor = true;
            this.btnDeleteContact.Click += new System.EventHandler(this.btnDeleteContact_Click);
            // 
            // btnEdit
            // 
            this.btnEdit.Location = new System.Drawing.Point(28, 260);
            this.btnEdit.Name = "btnEdit";
            this.btnEdit.Size = new System.Drawing.Size(194, 29);
            this.btnEdit.TabIndex = 7;
            this.btnEdit.Text = "Edytuj kontakt";
            this.btnEdit.UseVisualStyleBackColor = true;
            this.btnEdit.Click += new System.EventHandler(this.btnEdit_Click);
            // 
            // panel1
            // 
            this.panel1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(192)))), ((int)(((byte)(255)))), ((int)(((byte)(255)))));
            this.panel1.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.panel1.Controls.Add(this.btnAddNew);
            this.panel1.Controls.Add(this.btnEdit);
            this.panel1.Controls.Add(this.txtBoxItem);
            this.panel1.Controls.Add(this.btnDeleteContact);
            this.panel1.Controls.Add(this.btnClear);
            this.panel1.Controls.Add(this.btnInsert);
            this.panel1.Location = new System.Drawing.Point(253, 0);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(253, 450);
            this.panel1.TabIndex = 8;
            // 
            // panel2
            // 
            this.panel2.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(255)))), ((int)(((byte)(255)))), ((int)(((byte)(192)))));
            this.panel2.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.panel2.Controls.Add(this.addNewButton);
            this.panel2.Controls.Add(this.editBookButton);
            this.panel2.Controls.Add(this.deleteBookButton);
            this.panel2.Controls.Add(this.clearAllButton);
            this.panel2.Controls.Add(this.insertBookButton);
            this.panel2.Location = new System.Drawing.Point(541, 0);
            this.panel2.Name = "panel2";
            this.panel2.Size = new System.Drawing.Size(253, 462);
            this.panel2.TabIndex = 9;
            // 
            // addNewButton
            // 
            this.addNewButton.Location = new System.Drawing.Point(28, 62);
            this.addNewButton.Name = "addNewButton";
            this.addNewButton.Size = new System.Drawing.Size(194, 29);
            this.addNewButton.TabIndex = 2;
            this.addNewButton.Text = "Dodaj na koniec listy";
            this.addNewButton.UseVisualStyleBackColor = true;
            this.addNewButton.Click += new System.EventHandler(this.addNewButton_Click);
            // 
            // editBookButton
            // 
            this.editBookButton.Location = new System.Drawing.Point(28, 260);
            this.editBookButton.Name = "editBookButton";
            this.editBookButton.Size = new System.Drawing.Size(194, 29);
            this.editBookButton.TabIndex = 7;
            this.editBookButton.Text = "Edytuj książkę";
            this.editBookButton.UseVisualStyleBackColor = true;
            // 
            // deleteBookButton
            // 
            this.deleteBookButton.Location = new System.Drawing.Point(28, 194);
            this.deleteBookButton.Name = "deleteBookButton";
            this.deleteBookButton.Size = new System.Drawing.Size(194, 29);
            this.deleteBookButton.TabIndex = 6;
            this.deleteBookButton.Text = "Usuń książkę";
            this.deleteBookButton.UseVisualStyleBackColor = true;
            // 
            // clearAllButton
            // 
            this.clearAllButton.Location = new System.Drawing.Point(28, 326);
            this.clearAllButton.Name = "clearAllButton";
            this.clearAllButton.Size = new System.Drawing.Size(194, 29);
            this.clearAllButton.TabIndex = 3;
            this.clearAllButton.Text = "Wyczyść listę książek";
            this.clearAllButton.UseVisualStyleBackColor = true;
            this.clearAllButton.Click += new System.EventHandler(this.clearAllButton_Click);
            // 
            // insertBookButton
            // 
            this.insertBookButton.Location = new System.Drawing.Point(28, 128);
            this.insertBookButton.Name = "insertBookButton";
            this.insertBookButton.Size = new System.Drawing.Size(194, 29);
            this.insertBookButton.TabIndex = 5;
            this.insertBookButton.Text = "Wstaw książkę";
            this.insertBookButton.UseVisualStyleBackColor = true;
            this.insertBookButton.Click += new System.EventHandler(this.insertBookButton_Click);
            // 
            // BooksListView
            // 
            this.BooksListView.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(255)))), ((int)(((byte)(255)))), ((int)(((byte)(192)))));
            this.BooksListView.Columns.AddRange(new System.Windows.Forms.ColumnHeader[] {
            this.columnHeader1,
            this.columnHeader2,
            this.columnHeader3,
            this.columnHeader4});
            this.BooksListView.FullRowSelect = true;
            this.BooksListView.GridLines = true;
            this.BooksListView.HideSelection = false;
            this.BooksListView.Location = new System.Drawing.Point(800, 0);
            this.BooksListView.MultiSelect = false;
            this.BooksListView.Name = "BooksListView";
            this.BooksListView.Size = new System.Drawing.Size(479, 462);
            this.BooksListView.TabIndex = 10;
            this.BooksListView.UseCompatibleStateImageBehavior = false;
            this.BooksListView.View = System.Windows.Forms.View.Details;
            // 
            // columnHeader1
            // 
            this.columnHeader1.Text = "Lp";
            this.columnHeader1.Width = 40;
            // 
            // columnHeader2
            // 
            this.columnHeader2.Text = "Tytuł";
            this.columnHeader2.Width = 160;
            // 
            // columnHeader3
            // 
            this.columnHeader3.Text = "Autor";
            this.columnHeader3.Width = 160;
            // 
            // columnHeader4
            // 
            this.columnHeader4.Text = "Cena";
            this.columnHeader4.TextAlign = System.Windows.Forms.HorizontalAlignment.Right;
            // 
            // Ex3Form
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 20F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(1424, 549);
            this.Controls.Add(this.BooksListView);
            this.Controls.Add(this.panel2);
            this.Controls.Add(this.panel1);
            this.Controls.Add(this.listBoxContacts);
            this.Name = "Ex3Form";
            this.Text = "Ćwiczenie 3";
            this.FormClosed += new System.Windows.Forms.FormClosedEventHandler(this.Ex3Form_FormClosed);
            this.Load += new System.EventHandler(this.Ex3Form_Load);
            this.panel1.ResumeLayout(false);
            this.panel1.PerformLayout();
            this.panel2.ResumeLayout(false);
            this.ResumeLayout(false);

        }

        #endregion
        private System.Windows.Forms.TextBox txtBoxItem;
        private System.Windows.Forms.Button btnAddNew;
        private System.Windows.Forms.Button btnClear;
        private System.Windows.Forms.ListBox listBoxContacts;
        private System.Windows.Forms.Button btnInsert;
        private System.Windows.Forms.Button btnDeleteContact;
        private System.Windows.Forms.Button btnEdit;
        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.Panel panel2;
        private System.Windows.Forms.Button addNewButton;
        private System.Windows.Forms.Button editBookButton;
        private System.Windows.Forms.Button deleteBookButton;
        private System.Windows.Forms.Button clearAllButton;
        private System.Windows.Forms.Button insertBookButton;
        private System.Windows.Forms.ListView BooksListView;
        private System.Windows.Forms.ColumnHeader columnHeader1;
        private System.Windows.Forms.ColumnHeader columnHeader2;
        private System.Windows.Forms.ColumnHeader columnHeader3;
        private System.Windows.Forms.ColumnHeader columnHeader4;
    }
}