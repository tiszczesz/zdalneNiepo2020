using Microsoft.AspNetCore.Mvc;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Hosting;
using Microsoft.AspNetCore.Mvc.Rendering;
using Microsoft.EntityFrameworkCore;
using Microsoft.Extensions.Hosting;
using WebMVC_EFSelf.Data;

using WebMVC_EFSelf.Repositories;
using WebMVC_EFSelf.Models;

namespace WebMVC_EFSelf.Controllers
{
    public class CupcakeController : Controller {
        private IWebHostEnvironment _environment;
        private ICupcakeRepository _repository;
        public CupcakeController(IWebHostEnvironment environment,ICupcakeRepository repository) {
            _environment = environment;
            _repository = repository;
        }
        public IActionResult Index()
        {
            //CupcakeContext dContext = _environment.
            
            return View(_repository.GetCupcakes());
        }

        [HttpGet]
        public IActionResult Create() {
            PopulateBakieriesDropDownList();
            return View();
        }

        private void PopulateBakieriesDropDownList(int? selectedBakery = null) {
            var bakieries = _repository.PopulateBakeriesDropDownList();
            ViewBag.BakeryID =
                new SelectList(bakieries.AsNoTracking(), "BakeryId",
                          "BakeryName", selectedBakery);
        }

        public IActionResult GetImage(int id) {
            Cupcake reqCupcake = _repository.GetCupcakeById(id);
            if (reqCupcake != null) {
                string webRootpath = _environment.WebRootPath;
                string folderPath = "\\images\\";
                string fullPath = webRootpath + folderPath + reqCupcake.ImageName;
                if (System.IO.File.Exists(fullPath)) {
                    FileStream fileOnDisk = new FileStream(fullPath, FileMode.Open);
                    byte[] fileBytes;
                    using (BinaryReader br = new BinaryReader(fileOnDisk)) {
                        fileBytes = br.ReadBytes((int) fileOnDisk.Length);
                    }
                    return File(fileBytes, reqCupcake.ImageMimeType);
                }
                else {
                    if (reqCupcake.PhotFile.Length > 0) {
                        return File(reqCupcake.PhotFile, reqCupcake.ImageMimeType);
                    }
                    else {
                        return NotFound();
                    }
                }

            }
            else {
                return NotFound();
            }
        }
    }
}
