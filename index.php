<?php
// index.php - complete plumber website with integrated contact form handler

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $name     = htmlspecialchars(trim($_POST['full_name']));
    $phone    = htmlspecialchars(trim($_POST['phone']));
    $email    = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $postcode = htmlspecialchars(trim($_POST['postcode']));
    $service  = htmlspecialchars(trim($_POST['service']));
    $message  = htmlspecialchars(trim($_POST['message']));

    // Prepare email
    // <-- Set your email here: replace with the address you want to receive submissions
    $to      = 'regihoxha1510r@gmail.com'; // <-- YOUR EMAIL ADDRESS HERE
                  echo "<option value='\$val' \$sel>\$label</option>";
                }
                ?>
              </select>
            </div>
            <div>
              <label for="contact-message" class="block text-dark mb-1">Message</label>
              <textarea id="contact-message" name="message" rows="4" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-secondary"><?= htmlentities(\$_POST['message'] ?? '') ?></textarea>
            </div>
            <button type="submit" class="w-full bg-secondary hover:bg-opacity-90 text-white font-bold py-3 rounded-lg">Send Message <i class="fas fa-paper-plane ml-2"></i></button>
          </form>
        </div>
        
        <!-- Contact Info Section -->
        <div>
          <!-- your unchanged contact info markup -->
        </div>
      </div>
    </div>
  </section>

  <!-- Footer and scripts -->
</body>
</html>
