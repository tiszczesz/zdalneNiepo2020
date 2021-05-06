using Microsoft.AspNetCore.Mvc;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using KursWebMVC_1.Models;
using Microsoft.AspNetCore.Hosting;


namespace KursWebMVC_1.Controllers
{
    public class PhotoController : Controller {
        private IWebHostEnvironment env;
        private List<Photo> photos;

        public PhotoController(IWebHostEnvironment env) {
            this.env = env;
            this.photos = PhotosRepo.GetPhotos();
        }
        public IActionResult Index() {
            photos = PhotosRepo.GetPhotos();
            return View(photos);
        }

        public string GetPathImage(int PhotoId) {
            Photo requstedPhoto = photos.FirstOrDefault(p => p.PhotoID == PhotoId);
            //string webRootPath = env.WebRootPath;
            string folderPath = "\\images\\";
            if (requstedPhoto != null) {
                return folderPath + requstedPhoto.PhotoFileName;
            }
            else {
                return  folderPath + "default.jpg";
            }
        }
    }
}
