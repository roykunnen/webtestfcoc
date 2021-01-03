using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;
using FCOC.Classes;
using brontona.Data;

namespace brontona.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class suppliersController : ControllerBase
    {
        private readonly Context _context;

        public suppliersController(Context context)
        {
            _context = context;
        }

        // GET: api/suppliers
        [HttpGet]
        public IEnumerable<suppliers> Getsuppliers()
        {
            return _context.suppliers;
        }

        // GET: api/suppliers/5
        [HttpGet("{id}")]
        public async Task<IActionResult> Getsuppliers([FromRoute] string id)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            var suppliers = await _context.suppliers.FindAsync(id);

            if (suppliers == null)
            {
                return NotFound();
            }

            return Ok(suppliers);
        }

        // PUT: api/suppliers/5
        [HttpPut("{id}")]
        public async Task<IActionResult> Putsuppliers([FromRoute] string id, [FromBody] suppliers suppliers)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            if (id != suppliers.supplierid)
            {
                return BadRequest();
            }

            _context.Entry(suppliers).State = EntityState.Modified;

            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateConcurrencyException)
            {
                if (!suppliersExists(id))
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

        // POST: api/suppliers
        [HttpPost]
        public async Task<IActionResult> Postsuppliers([FromBody] suppliers suppliers)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            _context.suppliers.Add(suppliers);
            await _context.SaveChangesAsync();

            return CreatedAtAction("Getsuppliers", new { id = suppliers.supplierid }, suppliers);
        }

        // DELETE: api/suppliers/5
        [HttpDelete("{id}")]
        public async Task<IActionResult> Deletesuppliers([FromRoute] string id)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            var suppliers = await _context.suppliers.FindAsync(id);
            if (suppliers == null)
            {
                return NotFound();
            }

            _context.suppliers.Remove(suppliers);
            await _context.SaveChangesAsync();

            return Ok(suppliers);
        }

        private bool suppliersExists(string id)
        {
            return _context.suppliers.Any(e => e.supplierid == id);
        }
    }
}