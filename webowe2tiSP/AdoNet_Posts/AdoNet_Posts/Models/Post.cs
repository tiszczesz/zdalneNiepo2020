using System;
using System.ComponentModel.DataAnnotations;

namespace AdoNet_Posts.Models {
    public class Post {
        public int Id { get; set; }
        
        [Display(Name = "Tytuł posta")]
        [Required]
        public string Title { get; set; }
        
        [Display(Name = "Zawartość")]
        public string Content { get; set; }
        
        [Display(Name = "Date utworzenia")]
        public DateTime Date { get; set; }
    }
}