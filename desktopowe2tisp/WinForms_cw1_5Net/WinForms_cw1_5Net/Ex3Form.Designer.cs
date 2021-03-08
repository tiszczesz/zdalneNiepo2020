
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
            this.btnInsert = new System.Windows.Forms.Button();
            this.btnClear = new System.Windows.Forms.Button();
            this.lBoxItems = new System.Windows.Forms.ListBox();
            this.SuspendLayout();
            // 
            // txtBoxItem
            // 
            this.txtBoxItem.Location = new System.Drawing.Point(276, 12);
            this.txtBoxItem.Name = "txtBoxItem";
            this.txtBoxItem.Size = new System.Drawing.Size(172, 27);
            this.txtBoxItem.TabIndex = 1;
            // 
            // btnInsert
            // 
            this.btnInsert.Location = new System.Drawing.Point(481, 11);
            this.btnInsert.Name = "btnInsert";
            this.btnInsert.Size = new System.Drawing.Size(307, 29);
            this.btnInsert.TabIndex = 2;
            this.btnInsert.Text = "Wstaw do listy";
            this.btnInsert.UseVisualStyleBackColor = true;
            // 
            // btnClear
            // 
            this.btnClear.Location = new System.Drawing.Point(481, 58);
            this.btnClear.Name = "btnClear";
            this.btnClear.Size = new System.Drawing.Size(307, 29);
            this.btnClear.TabIndex = 3;
            this.btnClear.Text = "Wyczyść listę";
            this.btnClear.UseVisualStyleBackColor = true;
            // 
            // lBoxItems
            // 
            this.lBoxItems.Dock = System.Windows.Forms.DockStyle.Left;
            this.lBoxItems.FormattingEnabled = true;
            this.lBoxItems.ItemHeight = 20;
            this.lBoxItems.Items.AddRange(new object[] {
            "Tomasz",
            "Roman",
            "Monika"});
            this.lBoxItems.Location = new System.Drawing.Point(0, 0);
            this.lBoxItems.Name = "lBoxItems";
            this.lBoxItems.Size = new System.Drawing.Size(254, 450);
            this.lBoxItems.TabIndex = 4;
            // 
            // Ex3Form
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 20F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(800, 450);
            this.Controls.Add(this.lBoxItems);
            this.Controls.Add(this.btnClear);
            this.Controls.Add(this.btnInsert);
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
        private System.Windows.Forms.Button btnInsert;
        private System.Windows.Forms.Button btnClear;
        private System.Windows.Forms.ListBox lBoxItems;
    }
}