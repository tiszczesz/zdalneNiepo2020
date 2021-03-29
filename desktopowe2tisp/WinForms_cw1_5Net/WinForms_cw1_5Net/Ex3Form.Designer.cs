
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
            this.SuspendLayout();
            // 
            // txtBoxItem
            // 
            this.txtBoxItem.Location = new System.Drawing.Point(276, 12);
            this.txtBoxItem.Name = "txtBoxItem";
            this.txtBoxItem.Size = new System.Drawing.Size(172, 27);
            this.txtBoxItem.TabIndex = 1;
            // 
            // btnAddNew
            // 
            this.btnAddNew.Location = new System.Drawing.Point(481, 11);
            this.btnAddNew.Name = "btnAddNew";
            this.btnAddNew.Size = new System.Drawing.Size(307, 29);
            this.btnAddNew.TabIndex = 2;
            this.btnAddNew.Text = "Dodaj na koniec listy";
            this.btnAddNew.UseVisualStyleBackColor = true;
            this.btnAddNew.Click += new System.EventHandler(this.btnAddNew_Click);
            // 
            // btnClear
            // 
            this.btnClear.Location = new System.Drawing.Point(481, 275);
            this.btnClear.Name = "btnClear";
            this.btnClear.Size = new System.Drawing.Size(307, 29);
            this.btnClear.TabIndex = 3;
            this.btnClear.Text = "Wyczyść listę";
            this.btnClear.UseVisualStyleBackColor = true;
            this.btnClear.Click += new System.EventHandler(this.btnClear_Click);
            // 
            // listBoxContacts
            // 
            this.listBoxContacts.Dock = System.Windows.Forms.DockStyle.Left;
            this.listBoxContacts.FormattingEnabled = true;
            this.listBoxContacts.ItemHeight = 20;
            this.listBoxContacts.Location = new System.Drawing.Point(0, 0);
            this.listBoxContacts.Name = "listBoxContacts";
            this.listBoxContacts.Size = new System.Drawing.Size(254, 450);
            this.listBoxContacts.TabIndex = 4;
            // 
            // btnInsert
            // 
            this.btnInsert.Location = new System.Drawing.Point(481, 77);
            this.btnInsert.Name = "btnInsert";
            this.btnInsert.Size = new System.Drawing.Size(307, 29);
            this.btnInsert.TabIndex = 5;
            this.btnInsert.Text = "Wstaw kontakt";
            this.btnInsert.UseVisualStyleBackColor = true;
            this.btnInsert.Click += new System.EventHandler(this.btnInsert_Click);
            // 
            // btnDeleteContact
            // 
            this.btnDeleteContact.Location = new System.Drawing.Point(481, 143);
            this.btnDeleteContact.Name = "btnDeleteContact";
            this.btnDeleteContact.Size = new System.Drawing.Size(307, 29);
            this.btnDeleteContact.TabIndex = 6;
            this.btnDeleteContact.Text = "Usuń kontakt";
            this.btnDeleteContact.UseVisualStyleBackColor = true;
            this.btnDeleteContact.Click += new System.EventHandler(this.btnDeleteContact_Click);
            // 
            // btnEdit
            // 
            this.btnEdit.Location = new System.Drawing.Point(481, 209);
            this.btnEdit.Name = "btnEdit";
            this.btnEdit.Size = new System.Drawing.Size(307, 29);
            this.btnEdit.TabIndex = 7;
            this.btnEdit.Text = "Edytuj kontakt";
            this.btnEdit.UseVisualStyleBackColor = true;
            // 
            // Ex3Form
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 20F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(800, 450);
            this.Controls.Add(this.btnEdit);
            this.Controls.Add(this.btnDeleteContact);
            this.Controls.Add(this.btnInsert);
            this.Controls.Add(this.listBoxContacts);
            this.Controls.Add(this.btnClear);
            this.Controls.Add(this.btnAddNew);
            this.Controls.Add(this.txtBoxItem);
            this.Name = "Ex3Form";
            this.Text = "Ćwiczenie 3";
            this.FormClosed += new System.Windows.Forms.FormClosedEventHandler(this.Ex3Form_FormClosed);
            this.Load += new System.EventHandler(this.Ex3Form_Load);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion
        private System.Windows.Forms.TextBox txtBoxItem;
        private System.Windows.Forms.Button btnAddNew;
        private System.Windows.Forms.Button btnClear;
        private System.Windows.Forms.ListBox listBoxContacts;
        private System.Windows.Forms.Button btnInsert;
        private System.Windows.Forms.Button btnDeleteContact;
        private System.Windows.Forms.Button btnEdit;
    }
}