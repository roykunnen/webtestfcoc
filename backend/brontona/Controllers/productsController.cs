using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;
using FCOC.Classes;
using brontona.Data;
using System.Data.SqlClient;
using Microsoft.EntityFrameworkCore.Internal;

namespace brontona.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class productsController : ControllerBase
    {
        private readonly Context _context;

        public productsController(Context context)
        {
            _context = context;
        }

        // GET: api/products
        [HttpGet]
        public IActionResult Getproducts()
        {

            var result = _context.products.Join(_context.reviews, products => products.productid, reviews => reviews.productid, (products, reviews) => new
            {

                productid = products.productid,
                name = products.name,
                image = products.image,
                category = products.category,
                size = products.size,
                salesprice = products.salesprice,
                material = products.material,
                score = reviews.score
            })
                .GroupBy(p => new { p.productid, p.name, p.image, p.category, p.size, p.salesprice, p.material }).Select(g => new
                {
                    g.Key.productid,
                    g.Key.name,
                    g.Key.image,
                    g.Key.category,
                    g.Key.size,
                    g.Key.salesprice,
                    g.Key.material,
                    score = g.Average(s => s.score)
                });
            return Ok(result);
        }

        // GET: api/products/5
        [HttpGet("{id}")]
        public IActionResult Getproducts( string id)
        {
            var result = _context.products.Where(i =>i.productid ==id).Join(_context.reviews, products => products.productid, reviews => reviews.productid, (products, reviews) => new
            {
                productid = products.productid,
                name = products.name,
                image = products.image,
                category = products.category,
                size = products.size,
                salesprice = products.salesprice,
                material = products.material,
                score = reviews.score
            }).GroupBy(p => new { p.productid, p.name, p.image, p.category, p.size, p.salesprice, p.material }).Select(g => new
            {
                g.Key.productid,
                g.Key.name,
                g.Key.image,
                g.Key.category,
                g.Key.size,
                g.Key.salesprice,
                g.Key.material,
                score = g.Average(s => s.score)
            });
            return Ok(result);
        }
        // GET: api/products/productname
        [HttpGet("/{productname}")]
        public IActionResult GetProductsQuery(string productname)
        {
            
            var result = _context.products.Where(i => EF.Functions.Like(i.name,"%"+productname+"%")).Join(_context.reviews, products => products.productid, reviews => reviews.productid, (products, reviews) => new
            {
                productid = products.productid,
                name = products.name,
                description = products.description,
                image = products.image,
                category = products.category,
                size = products.size,
                salesprice = products.salesprice,
                material = products.material,
                quantityinstock = products.quantityinstock,
                score = reviews.score
            }).GroupBy(p => new { p.productid, p.name,p.description, p.image, p.category, p.size, p.salesprice, p.material,p.quantityinstock }).Select(g => new
            {
                g.Key.productid,
                g.Key.name,
                g.Key.description,
                g.Key.image,
                g.Key.category,
                g.Key.size,
                g.Key.salesprice,
                g.Key.material,
                g.Key.quantityinstock,
                score = g.Average(s => s.score)
            });
            return Ok(result);
        }
        
        [HttpGet("/query")]
        public IActionResult GetProductsQuery([FromQuery] string name,[FromQuery] string category,[FromQuery] string material, [FromQuery] string size)
        {
            string likename = "%" + name + "%";
            string likecat = "%" + category + "%";
            string likemat = "%" + material + "%";
            string likesize = "%" + size + "%";
            
            
            var result = _context.products.Where(i => EF.Functions.Like(i.name, likename) && EF.Functions.Like(i.category, likecat) && EF.Functions.Like(i.material, likemat) && EF.Functions.Like(Convert.ToString(i.size), likesize)).Join(_context.reviews, products => products.productid, reviews => reviews.productid, (products, reviews) => new
            {
                productid = products.productid,
                name = products.name,
                image = products.image,
                category = products.category,
                size = products.size,
                salesprice = products.salesprice,
                material = products.material,
                score = reviews.score
            })
                .GroupBy(p => new { p.productid, p.name, p.image, p.category, p.size, p.salesprice, p.material }).Select(g => new
                {
                    g.Key.productid,
                    g.Key.name,
                    g.Key.image,
                    g.Key.category,
                    g.Key.size,
                    g.Key.salesprice,
                    g.Key.material,
                    score = g.Average(s => s.score)
                });
            
            
            return Ok(result);
            
        }




        // PUT: api/products/5
        [HttpPut("{id}")]
        public async Task<IActionResult> Putproducts([FromRoute] string id, [FromBody] products products)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            if (id != products.productid)
            {
                return BadRequest();
            }

            _context.Entry(products).State = EntityState.Modified;

            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateConcurrencyException)
            {
                if (!productsExists(id))
                {
                    return NotFound();
                }
                else
                {
                    throw;
                }
            }

            return NoContent();
        }

        // POST: api/products
        [HttpPost]
        public async Task<IActionResult> Postproducts([FromBody] products products)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            _context.products.Add(products);
            await _context.SaveChangesAsync();

            return CreatedAtAction("Getproducts", new { id = products.productid }, products);
        }

        // DELETE: api/products/5
        [HttpDelete("{id}")]
        public async Task<IActionResult> Deleteproducts([FromRoute] string id)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            var products = await _context.products.FindAsync(id);
            if (products == null)
            {
                return NotFound();
            }

            _context.products.Remove(products);
            await _context.SaveChangesAsync();

            return Ok(products);
        }

        private bool productsExists(string id)
        {
            return _context.products.Any(e => e.productid == id);
        }
    }
}