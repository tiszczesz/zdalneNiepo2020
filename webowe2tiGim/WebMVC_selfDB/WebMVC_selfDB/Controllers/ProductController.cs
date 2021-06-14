using Microsoft.AspNetCore.Mvc;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;
using WebMVC_selfDB.Data;
using WebMVC_selfDB.Models;

namespace WebMVC_selfDB.Controllers
{
    public class ProductController : Controller {
        private ProductDbContext _db;

        public ProductController(ProductDbContext dbContext) {
            _db = dbContext;
        }
        public IActionResult Index() {
            List<Product> products = _db.Products.ToList();
            return View(products);
        }

        public IActionResult Delete(int? id) {
            if (id == null) return NotFound();
            Product toDelete = _db.Products.FirstOrDefault(p => p.Id == id);
            if (toDelete != null) {
                _db.Products.Remove(toDelete);
                _db.SaveChanges();
            }
            return RedirectToAction("Index");
        }

        [HttpGet]
        public IActionResult Edit(int? id) {
            if (id == null) return NotFound();
            Product toEdit = _db.Products.FirstOrDefault(p => p.Id == id);
            if (toEdit == null) return NotFound();
            return View(toEdit);
        }

        [HttpPost]
        [ActionName("Edit")]
        [ValidateAntiForgeryToken]
        public IActionResult EditPost(int id,[Bind("Id,Name,Price,Description")] Product product) {
            if (ModelState.IsValid) {
                try {
                    _db.Products.Update(product);
                    _db.SaveChanges();
                }
                catch (DbUpdateConcurrencyException) {
                    if (!ProductExist(product.Id)) {
                        return NotFound();
                    }
                    else {
                        throw;
                    }
                }
                return RedirectToAction("Index");
            }

            return View(product);

        }

        private bool ProductExist(int productId) {
            return _db.Products.Any(p => p.Id == productId);
        }
    }
}
